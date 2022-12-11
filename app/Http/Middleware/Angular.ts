@Component({
    selector: 'app-message',
    templateUrl: './app.component.html'
})
  export class MessageComp {

    public data: string;

  constructor() {
    this.data = "Dobar dan";
  }
}
