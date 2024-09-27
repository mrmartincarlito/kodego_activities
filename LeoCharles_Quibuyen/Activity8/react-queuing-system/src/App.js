import "./App.css";
import "bootstrap/dist/css/bootstrap.css";
import Body from "./component/Body";
import HeaderCard from "./component/HeaderCard";
import TitleCard from "./component/TitleCard";
import TextCard from "./component/TextCard";

import DataTable from "react-data-table-component";
import { useState, useEffect } from "react";
import axios, { all } from "axios";



const columns = [
  {
    id : 'ID',
    selector : row => row.id,
    sortable : true
  }
 
];

const laravelController = "users";

function App() {
 
  const handelStore = () => {
    store();
  }

  const handelCount =() => {
    total();
  }
  const [data, setData] = useState ([]);
  

  useEffect(() => {
    index();
  },[]);

  async function index() {
      axios.get(process.env.REACT_APP_API + laravelController)
      .then((response) => {
        setData(response.data)
      })
  }

  async function store() {

    axios.post(process.env.REACT_APP_API + laravelController)
    .then((response) => {
      setData(response.data)
    })
}

async function total() {

  axios.get(process.env.REACT_APP_API + laravelController)
  .then((response) => {
    setData(response.data)
  })
}





  return (
    <div>
      <div className="row p-3">
        <div className="col-6">
          <div className="card01">
          <button type="button" onClick={handelStore} className="btn btn-primary btn-lg btn-block">
              Regular
            </button>
          </div>
        </div>
        <div className="col-2">
          <div className="card1 bg-info">
            <Body title="Counter 1" />
          </div>
        </div>
        <div className="col-2">
          <div className="card1 bg-info">
            <Body title="Counter 2" />
          </div>
        </div>
        <div className="col-2">
          <div className="card1 bg-info">
            <Body title="Counter 3" />
          </div>
        </div>
      </div>
      <div className="row p-3">
        <div className="col-6">
            <button type="button" onClick={handelStore} className="btn btn-success btn-lg btn-block">
              Regular
            </button>
          <div className="cardNumber bg-info h-100">
            <DataTable 
                columns={columns}
                id={data}
            />
           
            <TextCard msg="Please wait on your queue to be called and proceed to your designated counter" />
          </div>
        </div>

        <div className="col-2 bg-warning">
          <div className="card03">
            <HeaderCard text="Now Serving" />
          </div>
          <div className="cardNumber">
            <TitleCard number="001" />
          </div>
          <div className="card04">
            <TextCard msg2="Please proceed to the counter" />
          </div>
        </div>

        <div className="col-2 bg-warning">
          <div className="card03">
            <HeaderCard text="Now Serving" />
          </div>
          <div className="cardNumber">
            <TitleCard number="002" />
          </div>
          <div className="card04">
            <TextCard msg2="Please proceed to the counter" />
          </div>
        </div>

        <div className="col-2 bg-warning">
          <div className="card03">
            <HeaderCard text="Now Serving" />
          </div>
          <div className="cardNumber">
            <TitleCard number="003" />
          </div>
          <div className="card04">
            <TextCard msg2="Please proceed to the counter" />
          </div>
        </div>
      </div>
      <div className="row p-3">
        <div className="col-6"></div>

        <div className="col-2">
          <div className="card">
            <button type="button" className="btn-lg btn-block">
              NEXT
            </button>
          </div>
        </div>

        <div className="col-2">
          <div className="card">
            <button type="button" className="btn-lg btn-block">
              TRANSFER
            </button>
          </div>
        </div>

        <div className="col-2">
          <div className="card">
            <button type="button" className="btn-lg btn-block">
              SERVE
            </button>
          </div>
        </div>
      </div>

      <div className="row p-3">
        <div className="col-6"></div>

        <div className="col-2">
          <div className="card bg-info">
            <Body total="Total Serve: 10" />
          </div>
        </div>

        <div className="col-2">
          <div className="card bg-info">
            <Body total="Total Pending: 5" />
          </div>
        </div>

        <div className="col-2">
        <DataTable 
                columns={columns}
                handelCount
            />
          </div>
        </div>
      </div>
   
  );
}

export default App;
