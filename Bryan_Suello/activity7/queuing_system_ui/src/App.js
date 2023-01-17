import Regular from './components/Regular';
import QueueNumber from './components/QueueNumber';
import CounterName from './components/CounterName';
import NowServing from './components/NowServing';
import WhiteBoxes from './components/WhiteBoxes';
import Total from './components/Total';
import Welcome from './components/Welcome';

function App() {
  return (
    <>
      <Regular />
      <QueueNumber />
      {/* <CounterName title1="COUNTER 1" />
      <CounterName title2="COUNTER 2" />
      <CounterName title3="SENIOR/PWD" /> */}
      <CounterName />
      <NowServing />
      <WhiteBoxes />
      <Total />
      <Welcome />
    </>
  );
}

export default App;
