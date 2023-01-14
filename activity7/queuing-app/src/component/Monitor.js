import MonitorBtn from "./MonitorBtn";

function Monitor() {
    return (
      <div>
        <MonitorBtn btnName='Regular' btnMonitorstyle='regular' />
        <MonitorBtn btnName='Senior/PWD' btnMonitorstyle='priority' />
        <div className="queueNumberScreen">
        <span>This is your Queue</span>
        <br />
        <label className="queueNumber">001 </label>
        <p>Please wait on your queue to be called and proceed to your designated counter</p>
        <p className="thanks">Thanks for using My Queeing System</p>
        </div>
      </div>
    );
  }
  
  export default Monitor;