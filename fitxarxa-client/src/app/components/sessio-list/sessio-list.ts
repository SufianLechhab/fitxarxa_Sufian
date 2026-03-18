import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { IEntrenador } from '../../models/entrenador';
import { DadesSessionsService } from '../../services/dades-sessions';
export interface ISessio{

id:number
titol:string
dataP:string
places:number
entrenador_id:number
entrenador:IEntrenador

}

@Component({
  selector: 'app-sessio-list',
  templateUrl: './sessio-list.html',
  styleUrls: ['./sessio-list.css'],
      imports: [CommonModule],  
  standalone: true  
})

export class SessioList implements OnInit{

sessions:ISessio[]=[]

constructor(private dadesSessions:DadesSessionsService){}

ngOnInit() {
  this.dadesSessions.getSessions().subscribe(data => {
    this.sessions = data;
  });
}

}