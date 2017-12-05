import { ListPage } from './../list/list';
import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { ProdutoService } from '../../providers/produto-service/produto-service';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  public listaProduto = [];

  constructor (private produtoService: ProdutoService) {
    this.getProdutos();
  }

  getProdutos() {
    this.produtoService.getProdutos()
    .subscribe(data => this.listaProduto = data._embedded.produtos);
  }
}