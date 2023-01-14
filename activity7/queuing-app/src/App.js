import logo from './logo.svg';
import './App.css';
import './animatedFooter.css';
import Monitor from "./component/Monitor";
import Counter from "./component/Counter";

import {
  BrowserRouter as Router,
  Routes,
  Route,
  Link
} from "react-router-dom"

function App() {
  return (
    <div className='Container'>
      <div className="row p4">
        <div className="col-sm-5 Monitor ">
          <Monitor />
        </div>
        <div className="col-sm Counter1">
          <Counter counterNum='COUNTER 1' currentQueueNum='001' cBtnName='NEXT' tally='Total Served: 10'/>
        </div>
        <div className="col-sm Counter2">
          <Counter counterNum='COUNTER 2' currentQueueNum='002' cBtnName='TRANSFER' tally='Total Pending: 5'/>
        </div>
        <div className="col-sm Counter3">
          <Counter counterNum='COUNTER 3' currentQueueNum='009' cBtnName='SERVE' tally='Over all Total 15'/>
        </div>
      </div>
      <div className="fixed-bottom bounce">
        <p className='bounce'>WELCOME TO MY QUEUING SYSTEM COUNTER</p>
      </div>

    </div>
  );
}

export default App;
