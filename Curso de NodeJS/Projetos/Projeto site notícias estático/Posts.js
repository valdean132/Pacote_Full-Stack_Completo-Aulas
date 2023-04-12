var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var postSchema = new Schema({
    titulo:String,
    image:String,
    categoria:String,
    conteudo:String,
    slug:String,
    img_autor:String,
    nome_autor:String,
    views:Number,
}, {collection: 'posts'});

var Posts = mongoose.model("Posts", postSchema);

module.exports = Posts;

