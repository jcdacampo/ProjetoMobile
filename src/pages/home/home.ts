import { ListPage } from './../list/list';
import { Component } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
  selectedItem: any;
  icons: string[];
  items: Array<{title: string, value: string, quantidade: string}>;

  constructor(public navCtrl: NavController, public navParams: NavParams) {
    // If we navigated to this page, we will have an item available as a nav param
    this.selectedItem = navParams.get('item');

    this.items = [];
    this.items.push({
      title: 'Arroz Valicel 5 KG',
      value: 'R$ 8,99',
      quantidade: '20'
    });
}

itemTapped(event, item) {
  // That's right, we're pushing to ourselves!
  this.navCtrl.push(ListPage, {
      title: 'Arroz Valicel 5 KG',
      value: 'R$ 8,99',
      quantidade: '20'
  });
}
}