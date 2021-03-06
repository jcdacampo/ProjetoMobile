import { Http, Response } from '@angular/http';
import { Injectable } from '@angular/core';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/do';
import 'rxjs/add/operator/catch';
//import { Observable } from 'rxjs/Observable';

/*
  Generated class for the ProdutoServiceProvider provider.

  See https://angular.io/guide/dependency-injection for more info on providers
  and Angular DI.
*/
@Injectable()
export class ProdutoService {

  private API_URL = 'http://localhost:8080/produtos'

  constructor(private http: Http) {
    console.log('Hello ProdutoServiceProvider Provider');
  }
  /**
   * Trazer os produtos e listar
   */
  getProdutos(){
    return this.http.get(this.API_URL)
    .do(this.logResponse)
    .map(this.extractData)
  }

  private logResponse(res: Response) {
    console.log(res);
  }

  private extractData(res: Response) { 
    return res.json();
  }

  /**
   * Atualiza os produtos, pelo ID.
   * @param obj 
   */
  updateProdutos(obj){
    obj.valortotal = obj.quantidade * obj.valorunit;
    return this.http.put(this.API_URL+"/"+obj.id, obj)
    .map(res => res.json());
  }

}
