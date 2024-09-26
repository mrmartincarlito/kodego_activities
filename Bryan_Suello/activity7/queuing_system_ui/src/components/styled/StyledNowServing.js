import styled from 'styled-components';

const StyledNowServing = styled.div`
  color: #ffd0af;
  background-color: #fff3cd;
  width: 60%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  position: absolute;
  right: 0;
  top: 7.5em;
  div {
    width: 33%;
  }
  h2 {
    font-size: 5em;
    text-align: center;
    margin: 0.2em 0;
  }
  p {
    color: #542a0e;
    text-align: center;
    font-size: 0.9em;
  }
`;

export default StyledNowServing;
