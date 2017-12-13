import { ListPage } from './../list/list';
import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { ProdutoService } from '../../providers/produto-service/produto-service';
import { FormControl } from '@angular/forms/src/model';
import 'rxjs/add/operator/debounceTime';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  public listaProduto = [];
  searchQuery: string = '';
  items: any;
  
  constructor (private produtoService: ProdutoService,
               public navCtrl: NavController,
               public navParams: NavParams) {
    this.getProdutos();
     this.initializeItems();  
  }
  
   initializeItems() {
    this.items = this.listaProduto;
  }

  getProdutos() {
    this.produtoService.getProdutos()
    .subscribe(data => this.listaProduto = data._embedded.produtos);
  }

  goToEdit(produto){
   this.navCtrl.push(ListPage, {produto: produto})
  }
   getItems(ev: any) {
    // Reset items back to all of the items
    this.initializeItems();

    // set val to the value of the searchbar
    let val = ev.target.value;

    // if the value is an empty string don't filter the items
    if (val && val.trim() != '') {
      this.items = this.items.filter((item) => {
        return (item.descricao.toLowerCase().indexOf(val.toLowerCase()) > -1);
      })
    }
  } 
  
    /**
 * Fitragem dos dados
 * @param searchTerm 
 */
  filterItems(searchTerm){
           return this.items.descricao.filter((item) => {
               return item.toLowerCase().indexOf(searchTerm.toLowerCase()) > -1;
           });  
    }
}
