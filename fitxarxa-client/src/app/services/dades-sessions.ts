import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { ISessio } from '../components/sessio-list/sessio-list';

@Injectable({
  providedIn: 'root'
})
export class DadesSessionsService {

  constructor(private http:HttpClient) {}

  getSessions():Observable<ISessio[]>{

    return this.http.get<ISessio[]>('/api/sessions')

  }

}