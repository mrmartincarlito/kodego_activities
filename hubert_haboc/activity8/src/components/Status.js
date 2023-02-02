function Status (props) {
    return (
        <button style= {{ 
            border: "lightgray"
        }}
            className="row box6">
            <h5>{ props.status }</h5>
        </button>
    );
}

export default Status;