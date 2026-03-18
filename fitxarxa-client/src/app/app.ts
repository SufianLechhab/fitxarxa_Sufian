// src/app/app.ts
import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { NavBar } from './components/nav-bar/nav-bar'; // importa el component standalone

@Component({
  selector: 'app-root',
  templateUrl: './app.html',
  standalone: true,
  imports: [
    NavBar,      // <-- aquí afegim el NavBar
    RouterOutlet // <-- per a les rutes
  ]
})
export class App {}  // exporta l'AppComponent com a App si el main.ts ho importa així