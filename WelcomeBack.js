class WelcomeBack extends React.Component {
    constructor(props){
        super(props);
        this.state = {
            name: 'J',
            apppVersion: '1'
        }
    }

    render(){
        return(
          <>
           <h2>Contact Us</h2>
            <ul>
               <li>123-456-7899</li>
               <li>money@money.com</li>
               <li>1234 Real St. Orlando FL</li>
            </ul>
          </>
           
            
    )
    }


}