const express = require('express')

const app = express()

app.get('/', (req, res) => {
    res.send('Bonjour NODEJS !')
})

app.listen(8087)