const urlParams = new URLSearchParams(window.location.search);
const movie = urlParams.get('movie');

const movies = {
  guardianes1: {
    title: "Guardians of the Galaxy",
    description: "Los Guardianes de la Galaxia son un grupo de inadaptados en el universo que deben unirse para salvarlo de una amenaza galáctica.",
    video: "../peliculas/GUARDIANES DE LA GALAXIA 1.mp4"
  },
  guardianes2: {
    title: "Guardians of the Galaxy 2",
    description: "En esta secuela, los Guardianes deben enfrentar nuevos retos mientras buscan respuestas sobre el pasado de Peter Quill.",
    video: "../peliculas/GUARDIANES DE LA GALAXIA 2.mp4"
  },
  guardianes3: {
    title: "Guardians of the Galaxy 3",
    description: "La tercera entrega de los Guardianes de la Galaxia enfrenta a nuestros héroes a nuevas amenazas y emociones mientras se enfrentan a su destino.",
    video: "../peliculas/GUARDIANES DE LA GALAXIA 3.mp4"
  }
};

if (movie && movies[movie]) {
  const movieData = movies[movie];
  document.getElementById('movie-title').innerText = movieData.title;
  document.getElementById('movie-description').innerText = movieData.description;
  document.getElementById('movie-source').src = movieData.video;
  document.getElementById('movie').load(); 
} else {
  document.getElementById('movie-title').innerText = "Película no encontrada";
  document.getElementById('movie-description').innerText = "No se encuentra la película seleccionada.";
}
