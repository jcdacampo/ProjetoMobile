import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { ProdutoService } from '../../providers/produto-service/produto-service';
import { ToastController } from 'ionic-angular/components/toast/toast-controller';

@Component({
  selector: 'page-list',
  templateUrl: 'list.html'
})
export class ListPage {
  
  produto: any;

  constructor(public navCtrl: NavController,
              public navParams: NavParams,
              public produtoService: ProdutoService,
              public toastCtrl: ToastController) {
                
    this.produto = [];

    let produtoParam = this.navParams.get("produto");
  
    if(produtoParam != null){
      this.produto = produtoParam; 
     }
  }
}
