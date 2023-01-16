function DisplayCard(props) {
    return (
        <div>
            <div className="card">
                <div className={"card-body"}>
                    <h5 className="card title">{props.name}</h5>
                </div>
            </div>
        </div>
    );
};

export default DisplayCard;