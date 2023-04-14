const express = require('express');
const app = express();
const path = require('path');
const http = require('http').createServer(app);
const io = require('socket.io')(http);


var usuarios = [];
var socketIds = [];

app.engine('html', require('ejs').renderFile);
app.set('view engine', 'html');
app.use('/public', express.static(path.join(__dirname, 'public')));
app.set('views', path.join(__dirname, '/pages'));



app.get('/', (req, res) => {
    res.render('index', {});
});

io.on('connection',(socket)=>{
    socket.on('new user', data => {
        if(usuarios.indexOf(data) != -1){
            socket.emit('new user', {success: false});
        }else{
            usuarios.push(data);
            socketIds.push(socket.id);

            socket.emit('new user', {success: true});

            //Emit para os outros usuários dizendo que tem um novo usuário ativo.
            socket.broadcast.emit("nova conexao", data);
        }
    });


    socket.on('chat message', obj => {
        io.emit('chat message', obj);
        // if(usuarios.indexOf(obj.nome) != -1 && usuarios.indexOf(obj.nome) == socketIds.indexOf(socket.id)){
        // }else{
        //     console.log(usuarios)
        //     console.log(socketIds)
        //     console.error('Error: Vcoê não tem permissão para executar a ação...');
        // }
    });

    // socket.on('disconnect', () => {

    //     let id = socketIds.indexOf(socket.id);

    //     socketIds.splice(id,1);

    //     usuarios.splice(id,1);

    //     console.log(socketIds);

    //     console.log(usuarios);

    //     console.log('user disconnected');

    // });
});


http.listen(3000, () => {
  console.log('listening on *:3000');
});