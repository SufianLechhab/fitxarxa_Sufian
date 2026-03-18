import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

export interface IEntrenador {
  id: number;
  nom: string;
  cognoms: string;
  imatge: string | null;
}

@Injectable({
  providedIn: 'root'
})
export class DadesEntrenadorsService {

  constructor(private http: HttpClient) {}

  getEntrenadors(): Observable<IEntrenador[]> {
    return this.http.get<IEntrenador[]>('/api/entrenadors');
  }

  deleteEntrenador(id: number) {
    return this.http.delete(`/api/entrenador/${id}`);
  }
}