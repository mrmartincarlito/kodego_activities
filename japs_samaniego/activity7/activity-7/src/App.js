import logo from './logo.svg';
import './App.css';
//import './SampleTest.css';
import {
  BrowserRouter as Router,
  Routes,
  Route,
  Link
} from "react-router-dom";
import Display from './pages/Display';
import Home from './pages/Home';

function App() {
  return (
    <div>
      <Router>
      <nav className="navbar navbar-expand-lg bg-body-tertiary bg-success">
        <div className="container-fluid">
          <a className="navbar-brand" href="#">Queueing System</a>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarSupportedContent">
            <ul className="navbar-nav me-auto mb-2 mb-lg-0">
              <li className="nav-item">
                <Link to="/" className="nav-link active" aria-current="page" href="#">Home</Link>
              </li>
              <li className="nav-item">
                <Link to="/Display" className="nav-link" href="#">Display</Link>
              </li>
            </ul>
            <form className="d-flex" role="search">
              <input className="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button className="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <br />
      <Routes>
        <Route path="/Display" element={<Display />} />
        <Route path="/" element={<Home />} />
      </Routes>
      </Router>
    </div>

  );
}

export default App;
