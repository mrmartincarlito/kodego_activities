import './App.css';
import './SampleTest.css';

import QueueType from "./components/QueueType";
import { useState } from 'react';
import Counter from './components/Counter';

function App() {

  const [counter, setCounter] = useState(1);
  const [queueNumber, setQueueNumber] = useState('0');

  const regOnClick = () => {
    setCounter(counter + 1);
    setQueueNumber(counter.toString());
  };

  const vipOnClick = () => {
    setCounter(counter + 1);
    setQueueNumber(`${counter} S/V`);
  };

  const [ctr1QueueNo, setCtr1QueueNo] = useState('');
  const [ctr2QueueNo, setCtr2QueueNo] = useState('');
  const [ctr3QueueNo, setCtr3QueueNo] = useState('');

  const ctr1Click = (isServing) => {
    if (!isServing && queueNumber !== ctr2QueueNo && queueNumber !== ctr3QueueNo && !queueNumber.includes("S/V")) {
      setCtr1QueueNo(queueNumber);
    }
  };

  const ctr2Click = (isServing) => {
    if (!isServing && queueNumber !== ctr1QueueNo && queueNumber !== ctr3QueueNo && !queueNumber.includes("S/V")) {
      setCtr2QueueNo(queueNumber);
    }
  };

  const sClick = (isServing) => {
    if (!isServing && queueNumber !== ctr1QueueNo && queueNumber !== ctr2QueueNo && queueNumber.includes("S/V")) {
      setCtr3QueueNo(queueNumber);
    }
  };

  return (
    <div className="row p-4">
      <div className="col-5 center">
        <QueueType type='Regular' customColor='aqua' onClick={regOnClick} />
        <QueueType type='SENIOR/PWD' customColor='yellowGreen' onClick={vipOnClick} />
        <div className="box3 p-5">
          <h6>This is your queue</h6>
          <br />
          <br />
          <h1>{queueNumber}</h1>
          <br />
          <br />
          <h6>Please wait on your queue to be called then proceed to your designated counter</h6>
          <h5>Thank you for using My Queuing System</h5>
        </div>
      </div>
      <div className="row col-7">
        <Counter counterLabel="Counter 1" queueNumber={ctr1QueueNo} onNext={ctr1Click} />
        <Counter counterLabel="Counter 2" queueNumber={ctr2QueueNo} onNext={ctr2Click} />
        <Counter counterLabel="Senior/PWD" queueNumber={ctr3QueueNo} onNext={sClick} />
      </div>
    </div>
  );
}

export default App;
