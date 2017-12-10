import { ListPage } from '../../pages/list/list';
import { Component, Input, ViewChild, OnInit, Renderer } from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';
import { ProdutoService } from '../../providers/produto-service/produto-service';


@Component({
  selector: 'accordion',
  templateUrl: 'accordion.html'
})
export class AccordionComponent implements OnInit {

  public listaProduto = [];
  @Input('title') title: string;
  accordionExpanded = false;
  @ViewChild("cc") cardContent: any;
  icon: string = "arrow-forward";
  
  constructor (private produtoService: ProdutoService,
               public navCtrl: NavController,
               public navParams: NavParams,
               public renderer: Renderer) {
    this.getProdutos();
  }

  getProdutos() {
    this.produtoService.getProdutos()
    .subscribe(data => this.listaProduto = data._embedded.produtos);
  }

  goToEdit(produto){
   this.navCtrl.push(ListPage, {produto: produto})
  }

  ngOnInit(){
    console.log(this.cardContent.nativeElement);
    this.renderer.setElementStyle(this.cardContent.nativeElement, "webkitTransition", "max-height 500ms, padding 500ms")
  }

  toggleAccordion(){
    if(this.accordionExpanded){
      this.renderer.setElementStyle(this.cardContent.nativeElement, "max-height", "0px");
      this.renderer.setElementStyle(this.cardContent.nativeElement, "padding", "0px 16px");
    } else {
      this.renderer.setElementStyle(this.cardContent.nativeElement, "max-height", "400px");
      this.renderer.setElementStyle(this.cardContent.nativeElement, "padding", "13px 16px");
    }

    this.accordionExpanded = !this.accordionExpanded;
    this.icon = this.icon == "arrow-forward" ? "arrow-down" : "arrow-forward";
  }

}
