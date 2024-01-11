# MovieAppServer
A PHP server used to provide movies and tv infos given by TMDB api. 
It offers several routes which can be reachable by any front app. 

## API
The server is connected to free api database named TDMB https://www.themoviedb.org/

All endpoints of the server are reachable in local on http://localhost:8888/
Here is some example of GET endpoints:
- movies/popular
- movies/rated
- movies/theater
- ...

## Front
The goal of this project is to discover php backend solution and mainly provide datas as simply as possible for a specific need: Consumming data by a mobile app (Android & iOS).

The app framework chosen is Kotlin Multiplatform: https://kotlinlang.org/docs/multiplatform

More details here on this repo:
https://github.com/ThomasLegris/MovieApp

## Frameworks
Server written in PHP 8.2 and based on MAMP solution to manage the server lifecycle and its interactions.
Libraries: 
- Guzzle: https://docs.guzzlephp.org/en/stable/

