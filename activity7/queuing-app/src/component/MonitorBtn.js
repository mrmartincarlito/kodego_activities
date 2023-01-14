function MonitorBtn(props) {
    return (
      <div>
        <button type="button" className={props.btnMonitorstyle}>{props.btnName}</button>
      </div>
    );
  }
  
  export default MonitorBtn;