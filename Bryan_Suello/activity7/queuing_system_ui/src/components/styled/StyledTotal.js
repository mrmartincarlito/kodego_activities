import styled from 'styled-components';

const StyledTotal = styled.div`
  display: flex;
  justify-content: center;
  align-items: center;
  width: 60%;
  position: absolute;
  top: 30em;
  right: 0;
  div {
    border-radius: 5px;
    width: 35%;
    color: blue;
    background-color: #d1e7dd;
    margin: 0.1em;
  }
  p {
    font-size: 0.8em;
    padding: 0 1em;
  }
`;

export default StyledTotal;
