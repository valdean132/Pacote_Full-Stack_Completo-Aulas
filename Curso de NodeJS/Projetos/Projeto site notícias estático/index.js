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

var totalPosts = '';

Posts.find({}).sort({'_id': -1}).then((posts) => {
            
    totalPosts = posts.map(function(value){
        return{
            titulo: value.titulo,
            conteudo: value.conteudo,
            image: value.image,
            slug: value.slug,
            categoria: value.categoria,
            nome_autor: value.nome_autor,
            img_autor: value.img_autor,
            descricaoCurt: value.conteudo.substr(0, 100)+'...'
        };
    });

}).catch((err) => {
    console.log('Erro aparente: '+ err.message);
});



app.get('/', (req, res) => {

    if(req.query.busca != null){
        
        res.render('busca', {});
    }else{
        res.render('home', {posts: totalPosts});
    }

});

app.get('/:slug', (req, res) => {
    Posts.findOneAndUpdate({slug: req.params.slug}, {$inc: {views: 1}}, {new: true}).then((resposta) => {
        res.render('single', {posts: totalPosts, noticia: resposta});
    }).catch((err) => {
        console.log(err.message);
    });

});


app.listen(5000, () => {
    console.log('Servidor rodando');
})