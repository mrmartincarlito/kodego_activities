import DisplayCard from "../components/DisplayCard";
import CounterCard from "../components/CounterCard";

function Display() {
    return (
        <div>
            <div className="row p-3">
                <div className="col-6">
                    <DisplayCard name='Regular'/>
                    <DisplayCard name='Regular'/>
                    <DisplayCard name='This is your Queue'/>
                </div>
                <div className="col-2">
                    <DisplayCard name='Counter 1'/>
                    <DisplayCard />
                    <DisplayCard />
                    <DisplayCard />
                </div>
                <div className="col-2">
                    <DisplayCard name='Counter 2'/>
                    <DisplayCard />
                    <DisplayCard />
                    <DisplayCard />
                </div>
                <div className="col-2">
                    <DisplayCard name='Senior/PWD'/>
                    <DisplayCard />
                    <DisplayCard />
                    <DisplayCard />
                </div>
            </div>
        </div>
    );
};

export default Display;