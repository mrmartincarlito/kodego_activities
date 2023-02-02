function NowServing (props) {
    return (
        <div className="row box5">
            <h3>Now Serving </h3>
            <h1>{ props.number }</h1>
            <h5>Please proceed to the counter</h5>
        </div>
    );
}

export default NowServing;