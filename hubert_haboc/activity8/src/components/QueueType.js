function QueueType ({ type, onClick }) {
    return (
        <button className="btn btn-success box1" onClick={onClick}>
            <h2>{ type }</h2>
        </button>
    );
}

export default QueueType;
