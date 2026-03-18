import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { IEntrenador } from '../../models/entrenador';
import { DadesEntrenadorsService } from '../../services/dades-entrenadors';
@Component({
  selector: 'app-entrenador-list',
  templateUrl: './entrenador-list.html',
  styleUrls: ['./entrenador-list.css'],
    imports: [CommonModule],  
  standalone: true       
})
export class EntrenadorList implements OnInit {

  entrenadors: IEntrenador[] = [];

  constructor(private dadesEntrenadors: DadesEntrenadorsService) {}

  ngOnInit() {
    this.loadEntrenadors();
  }

  loadEntrenadors() {
    this.dadesEntrenadors.getEntrenadors().subscribe(
      data => this.entrenadors = data
    );
  }

  eliminar(id: number) {
    if(confirm('Segur que vols eliminar aquest entrenador?')) {
      this.dadesEntrenadors.deleteEntrenador(id).subscribe(() => {
        this.loadEntrenadors(); // refresca la llista
      });
    }
  }
}