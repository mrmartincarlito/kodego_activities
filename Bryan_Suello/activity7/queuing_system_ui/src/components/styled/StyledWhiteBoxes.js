import styled from 'styled-components';

const StyledWhiteBoxes = styled.div`
  width: 60%;
  position: absolute;
  right: 0;
  top: 21em;
  display: flex;
  div {
    border: 1px solid gray;
    border-radius: 5px;
    width: 35%;
    height: 8em;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0.1em;
  }
  p {
    color: gray;
    font-size: 0.9em;
  }
`;

export default StyledWhiteBoxes;
