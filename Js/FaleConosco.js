const express = require('express');
const nodemailer = require('nodemailer');
const app = express()

const port = 3000
const user = 'chufogodechao@outlook.com';
const pass = 'Crismora40';

app.get('/send',(req, res) =>{

    const transporter = nodemailer.createTransport({
        Host : 'smtp.office365.com',
        Port : '587',
        auth: {user, pass}
        // SMTPSecure : 'STARTTLS',
        // SMTPAuth : 'true'
    })
    transporter.sendMail({
        from : user,
        to: user,
        replyTo: user,
        subject: "ola seja bem vindo",
        text: "olá ",
    }).then(info=>{
        res.send(info)
    }).catch(error =>{
        res.send(error)
    })
})

//===================================
const form = document.getElementById('FaleConosco');
const nameInput = document.getElementById('nome');
const emailInput = document.getElementById('email');
const assuntoInput = document.getElementById('assunto');
const mensagemTextarea = document.getElementById('mensagem');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    //verfica se o nome está vazio;
    if(nameInput.value === ""){
        alert('Por favor, preencha o seu Nome');
        return;
    }
    //verfica se o email está vazio;
    if(emailInput.value === ""){
        alert('Por favor, preencha o seu Email');
        return;
    }
    //verfica se o email está vazio;
    if(assuntoInput.value === ""){
        alert('Por favor, preencha o Assunto');
        return;
    }
      //verfica se a mensagem está prenechida;
      if(mensagemTextarea.value === ""){
        alert('Por favor, preencha a Mensagem');
        return;
    } 
    // se todos os campos estiverem coretamentes preenchidos, envie o form
    form.submit();
    alert('Sua mensagem foi enviada com sucesso');
});

