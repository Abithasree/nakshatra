const express = require('express');
const http = require('http');
const socketIo = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = socketIo(server);

const PORT = process.env.PORT || 5000;

// Serve static files (CSS, images, etc.) from the same directory as your server script.
app.use(express.static(__dirname));

app.get('/', (req, res) => {
  res.sendFile(__dirname + '/chat.html');
});

io.on('connection', (socket) => {
  console.log('A user connected');

  socket.on('disconnect', () => {
    console.log('User disconnected');
  });

  // Receive and store the username when the user connects
  socket.on('set username', (username) => {
    socket.username = username;
  });

  socket.on('chat message', (data) => {
    io.emit('chat message', { username: socket.username, message: data.message });
  });

  // Typing indicator
  socket.on('typing', () => {
    socket.broadcast.emit('user typing', socket.username);
  });
});

server.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
