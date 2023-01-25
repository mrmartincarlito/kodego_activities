import { useState } from "react";

function Counter({ counterLabel, queueNumber, onNext }) {

  const [isServing, setIsServing] = useState(false);

  const next = () => {
    setIsServing(!isServing);
    onNext(isServing);
  }

  return (
    <div className="col-4 center">
      <div className="box4 p-2">
        <h3>{counterLabel}</h3>
      </div>
      <div className="box5">
        <h3>Now Serving </h3>
        <br />
        <h1>{queueNumber}</h1>
        <br />
        <h5>Please proceed to the counter</h5>
      </div>
      <button className="btn btn-secondary box6" onClick={next}>
        <h5>{isServing ? 'Serving' : 'Next'}</h5>
      </button>
      <div className="box7">
        <h6>Total Served</h6>
      </div>
    </div>
  );
}

export default Counter;