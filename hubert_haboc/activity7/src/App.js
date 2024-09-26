import logo from './logo.svg';
import './App.css';
import './SampleTest.css';
import {
  BrowserRouter as Router,
  Routes,
  Route,
  Link
} from "react-router-dom";

import CounterNumber from "./components/CounterNumber";
import QueueType from "./components/QueueType";
import NowServing from "./components/NowServing";
import Status from "./components/Status";
import Total from "./components/Total";

function App() {
  return (
    <div>
      <div className="row p-3">
        <div className="col-5 center">
          <QueueType type='Regular'/>
          <QueueType type='VIP/PWD'/>
          <div className="row box3">
            <h6>This is your queue</h6>
            <br />
            <h1>001</h1>
            <h6>Please wait on your queue to be called then proceed to your designated counter</h6>
            <h5>Thank you for using My Queuing System</h5>
          </div>
        </div>
        <div className="col-2 center">
          <CounterNumber counter='Counter 1'/>
          <NowServing number='003'/>
          <Status status='Next'/>
          <Total count='Total Served: 10'/>
        </div>
        <div className="col-2 center">
          <CounterNumber counter='Counter 2'/>
          <NowServing number='010'/>
          <Status status='Transfer'/>
          <Total count='Total Pending: 5'/>
        </div>
          <div className="col-2 center">
          <CounterNumber counter='Counter 3'/>
          <NowServing number='055'/>
          <Status status='Serve'/>
          <Total count='Overall Total: 15'/>
          </div>
        </div>
      </div>

      );
}

      export default App;
