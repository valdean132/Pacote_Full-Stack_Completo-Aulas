const express = require('express');
const mongoose = require('mongoose');
const path = require('path');
const bodyParser = require('body-parser');

const app = express();

const Posts = require('./posts');



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


app.listen(5000, () => {
    console.log('Servidor rodando');
})