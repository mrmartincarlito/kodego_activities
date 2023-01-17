function QueueType (props) {
    return (
        <div className="row box1">
            <h2 className={ props.customColor }>{ props.type }</h2>
        </div>
    );
}

export default QueueType;