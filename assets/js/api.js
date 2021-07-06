function musicaAovivo(musica) {
    const musicaRequest = new XMLHttpRequest();
    musicaRequest.open(musica.metodo, musica.url, true)

    musicaRequest.onload = e => {
        if (musicaRequest.status === 200) {
            musica.sucesso(musicaRequest.response)
        } else if (musicaRequest.status >= 400) {
            musica.erro({
                codigo: musicaRequest.status,
                text: musicaRequest.statusText
            })
        }
    }
    musicaRequest.send()

}
musicaAovivo({
    url: "http://radiovox.conectastm.com/api-json/VkRGU2FrNUZOVzVRVkRBOStS",
    metodo: "GET",
    sucesso(reposta) {
        const musicaAtual = JSON.parse(reposta)

        const tdId = document.getElementById("musica")

        tdId.innerHTML = musicaAtual.musica_atual;

        return musica

    }
})
document.getElementById("musica").addEventListener("click", function(event) {
    // mostra o contador de cliques dentro da div clicada
    event.target.innerHTML = document.location.reload(true);
}, false);

console.log("fim")