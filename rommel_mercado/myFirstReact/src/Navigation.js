import logo from './logo.svg';
import './App.css';
import {
  BrowserRouter as Router, 
  Routes,
  Route,
  Link
} from 'react-router-dom';
import Home from './Home';
import Features  from './Features';
import  Pricing from './Pricing';

function Navigation() {
  return (
<div className="d-grid gap-2">
  <Router>
  <nav className="navbar navbar-expand-lg bg-body-tertiary">
  <div className="container-fluid">
    <Link className="navbar-brand" href="#">Logo</Link>
    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span className="navbar-toggler-icon"></span>
    </button>
    <div className="collapse navbar-collapse" id="navbarNav">
      <ul className="navbar-nav">
        <li className="nav-item">
          <Link to  = "/Home" className="nav-link active" aria-current="page" href="#">Home</Link>
        </li>
        <li className="nav-item">
          <Link to  = "/Features" className="nav-link" href="#">Features</Link>
        </li>
        <li className="nav-item">
          <Link to = "/Pricing" className="nav-link" href="#">Pricing</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br />
  <Routes>

    <Route path = "/Home" element = {<Home />}></Route>
    <Route path = "/Features" element = {<Features />}></Route>
    <Route path = "/Pricing" element = {<Pricing />}></Route>

  </Routes>
</Router>
</div>

  );
}

export default Navigation;
