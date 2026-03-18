import { Routes } from '@angular/router';
import { EntrenadorList } from './components/entrenador-list/entrenador-list';
import { SessioList } from './components/sessio-list/sessio-list';
import { Welcome } from './components/welcome/welcome';

export const routes: Routes = [
  { path: '', component: Welcome },
  { path: 'entrenadors', component: EntrenadorList },
  { path: 'sessions', component: SessioList }
];