import logo from './logo.svg';
import './App.css';
import "bootstrap/dist/css/bootstrap.min.css";
import {
  Container,
  Row,
  Col
} from 'react-bootstrap';


function App() {
  return (
    <div>
      <Container fluid className="container-fluid text-center">
        <Row className="p-5">
          <Col className="row g-2">
            <Row className="row g-2">
              <button className="p-3 bg-primary rounded-2 border border-hiddin">Regular</button>
            </Row>
            <Row className="row g-2">
              <button className="p-3 bg-success rounded-2 border border-hiddin">Regular</button>
            </Row>
            <Row className="row gy-2">
              <div className="p-5 bg-info rounded-1">Your Quee Number <br /> <strong className="fs-1 bg-info">001</strong> <br /> Please wait for your quee to be called to your designated counter <br /> <strong>Thank you for waiting</strong></div>

            </Row>
          </Col>
          <Col className="row g-2">
            <Row className="p-5">
              <Col className="row g-2">
                <row><div class="bg-success p-1 text-success bg-opacity-50 fs-1 bg-info"> <strong> <span>COUNTER 1</span></strong> </div></row>
                <row>
                  <div className="p-5 bg-warning rounded-1 bg-opacity-25 text-danger">Now Serving <br /> <strong className="fs-1">001</strong> <br /> Please proceed to the counter <br /></div>
                </row>
                <row>
                  <button className="p-5 rounded-2 border border-hiddin">NEXT</button>
                </row>
                <row>
                <div className="p-1 bg-warning rounded-1 bg-opacity-25 text-secondary">Total Served: 11</div>
                </row>
              </Col>
              <Col className="row g-2">
                <row><div class="bg-success p-1 text-success bg-opacity-50 fs-1 bg-info"> <strong> <span>COUNTER 2</span></strong> </div></row>
                <row>
                  <div className="p-5 bg-warning rounded-1 bg-opacity-25 text-danger">Now Serving <br /> <strong className="fs-1">001</strong> <br /> Please proceed to the counter <br /></div>
                </row>
                <row>
                  <button className="p-5 rounded-2 border border-hiddin">TRANSFER</button>
                </row>
                <row>
                <div className="p-1 bg-warning rounded-1 bg-opacity-25 text-secondary">Total Pending: 4</div>
                </row>
              </Col>
              <Col className="row g-2">
                <row><div class="bg-success p-1 text-success bg-opacity-50 fs-1 bg-info"> <strong> <span>SENIOR/PWD</span></strong> </div></row>
                <row>
                  <div className="p-5 bg-warning rounded-1 bg-opacity-25 text-danger">Now Serving <br /> <strong className="fs-1">009</strong> <br /> Please proceed to the counter <br /></div>
                </row>
                <row>
                  <button className="p-5 rounded-2 border border-hiddin">SERVE</button>
                </row>
                <row>
                  <div className="p-1 bg-warning rounded-1 bg-opacity-25 text-secondary">Overall Total: 20</div>
                </row>
              </Col>

            </Row>
          </Col>
        </Row>
      </Container>
    </div>
  );
}

export default App;
