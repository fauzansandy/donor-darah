const app = require('express')()
const server = require('http').Server(app)
const io = require('socket.io')(server)
const _ = require('lodash')

const guest = {}

server.listen(8083)

app.get('/', function (req, res) {
    res.send({ status: 'online', guest })
})

io.on('connection', function (socket) {
    socket.on('disconnect', function () {
        delete guest[socket.username]
    })
    socket.on('logout', function (event) {
        const { auth: { username } } = event
        delete guest[socket.username]
    })
    socket.on('new', function (event) {
        const { auth: { username } } = event
        socket.username = username
        guest[username] = socket.id
    })

    socket.on('checkUsername', function (event) {
        const { username } = event
        console.log('-', username)
        if (guest[username]) {
            socket.emit('loginNotAllowed')
        } else {
            socket.emit('loginAllowed')
        }
    })
})
