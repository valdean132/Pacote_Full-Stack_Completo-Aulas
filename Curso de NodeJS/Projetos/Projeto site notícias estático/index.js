const express = require('express');
const mongoose = require('mongoose');
const path = require('path');
const bodyParser = require('body-parser');
const fileupload = require('express-fileupload');
const fs = require('fs');

const app = express();

const Posts = require('./posts');

const session = require('express-session');

mongoose.connect('mongodb+srv://root:PUMtwT7lTRRQbO7Y@portalnoticia.dvapnek.mongodb.net/vscodernews?retryWrites=true&w=majority',{useNewUrlParser: true, useUniFiedTopology: true}).
        then(function(){
            console.log('Conectado com sucesso!');
        }).
        catch(function(err){
            console.log(err.message);
        });


app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: true,
}));

app.use(fileupload({
    useTempFiles: true,
    tempFileDir: path.join(__dirname, 'temp')
}))

app.use(session({
    secret: 'keyboard cat',
    cookie: {maxAge: 60000}
}));

app.engine('html', require('ejs').renderFile);
app.set('view engine', 'html');
app.use('/public', express.static(path.join(__dirname, 'public')));
app.use('/vendor', express.static(path.join(__dirname, 'vendor')));
app.set('views', path.join(__dirname, '/pages'));


async function postsAllViews() {
    var totalPosts = '';
    var postsTop = '';

    totalPosts = await Posts.find({}).sort({'_id': -1}).then((posts) => { 
        return posts.map(function(value){
            return{
                id: value._id,
                titulo: value.titulo,
                conteudo: value.conteudo,
                image: value.image,
                slug: value.slug,
                categoria: value.categoria,
                nome_autor: value.nome_autor,
                img_autor: value.img_autor,
                descricaoCurt: value.conteudo.length > 150 ? value.conteudo.substr(0, 150)+'...' : value.conteudo
            };
        });
    }).catch((err) => {
        console.log('Erro aparente: '+ err.message);
    });

    postsTop = await Posts.find({}).sort({'views': -1}).limit(4).then((postsViews)=>{
        return postsViews.map(function(value){
            return{
                titulo: value.titulo,
                conteudo: value.conteudo,
                image: value.image,
                slug: value.slug,
                categoria: value.categoria,
                nome_autor: value.nome_autor,
                img_autor: value.img_autor,
                descricaoCurt: value.conteudo.substr(0, 100)+'...',
                views: value.views
            };
        });
    }).catch((err) => {
        console.log('Erro aparente Views: '+ err.message);
    });

    return {
        totalPosts: totalPosts,
        postsTop: postsTop,
    }
}

app.get('/', async (req, res) => {

    if(req.query.busca != null){
        
        Posts.find({titulo: {$regex: req.query.busca, $options: "i"}}).then((posts) => {
            posts = posts.map(function(value){
                return{
                    titulo: value.titulo,
                    image: value.image,
                    slug: value.slug,
                    descricaoCurt: value.conteudo.length > 150 ? value.conteudo.substr(0, 150)+'...' : value.conteudo,
                    views: value.views
                };
            });
            res.render('busca', {posts: posts, contagem: posts.length});
            
        }).catch((err) => {
            console.log(err.message);
        });

    }else{
        let posts = await postsAllViews();
        res.render('home', {posts: posts.totalPosts, postsTop: posts.postsTop});
    }

});

app.get('/:slug', async (req, res) => {
    let posts = await postsAllViews();
    Posts.findOneAndUpdate({slug: req.params.slug}, {$inc: {views: 1}}, {new: true}).then((resposta) => {
        if(resposta != null){
            res.render('single', {postsTop: posts.postsTop, noticia: resposta});
        }else{
            res.redirect('/');
        }
    }).catch((err) => {
        console.log(err.message);
    });

});

var usuarios = [
    {
        login: 'valdean',
        senha: '123456',
        nome: 'Valdean Souza'
    }
];

app.post('/admin/login', (req, res) => {
    console.log();

    usuarios.map(function(val){
        if(val.login == req.body.login && val.senha === req.body.senha){
            req.session.login = val.login;
            req.session.nome = val.nome;
        }
    });
    
    res.redirect('/admin/login');
});

app.post('/admin/cadastro', (req, res) => {
    // console.log(req.files)

    let formato = req.files.arquivo.name.split('.');
    var imagem = '';

    if(formato[formato.length - 1] == 'jpg' || formato[formato.length - 1] == 'jpeg' || formato[formato.length - 1] == 'png'){
        imagem = new Date().getTime()+'.'+formato[formato.length - 1];
        req.files.arquivo.mv(__dirname+'/public/images/'+imagem);
        
        Posts.create({
            titulo: req.body.titulo_noticia,
            image: 'http://localhost:5000/public/images/'+imagem,
            categoria: req.body.categoria_noticia,
            conteudo: req.body.noticia,
            slug: req.body.slug,
            img_autor: 'https://i.ytimg.com/vi/7bdW-FDooWk/sddefault.jpg',
            nome_autor: req.session.nome,
            views: 0,
        });
    
        res.redirect('/admin/login');
    }else{
        res.send("Falha ao cadastrar devido a imagem ser de um formato invalido!");
        fs.unlinkSync(req.files.arquivo.tempFilePath);
    }


});

app.get('/admin/deletar/:id', (req, res) => {
    Posts.deleteOne({_id:req.params.id}).then(function(){
        res.redirect('/admin/login')
    })
});

app.get('/admin/login', async (req, res) => {
    
    if(req.session.login == null){
        res.render('admin-login', {});   
    }else{
        let posts = await postsAllViews();
        res.render('admin-panel', {posts: posts.totalPosts});
        // res.render('admin-panel', {});
    }
})

app.listen(5000, () => {
    console.log('Servidor rodando');
})