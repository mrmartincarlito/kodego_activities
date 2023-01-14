function Counter(props) {
    return (
      <div>
        <label className="counterNum">{props.counterNum}</label>
        <div className="nowScreen">
        <p className="nowText">Now Serving</p>
        <label className="numServe">{props.currentQueueNum}</label>
        <p>Please proceed to the Counter</p>
        </div>
        <button type="button" className="btnCounter" >{props.cBtnName}</button>
        <br />
        <label className="serveTally">{props.tally}</label>
      </div>
    );
  }
  
  export default Counter;