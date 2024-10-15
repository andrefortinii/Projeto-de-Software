// index.js
const express = require('express');
const cors = require('cors');
const authRoutes = require('./routes/auth');
const postRota = require('./routes/postagem')

const app = express();
app.use(cors());
app.use(express.json());

app.use('/api/auth', authRoutes);
app.use('/api/postagem',postRota);

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Servidor rodando na porta ${PORT}`));
