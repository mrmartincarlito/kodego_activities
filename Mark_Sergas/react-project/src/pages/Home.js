import DashboardCard from "../component/DashboardCard";

function Home() {
    return (
        <div>
            <div className="row">
                <div className="col-4 ">
                    <DashboardCard />
                </div>
                <div className="col-4 ">
                    <DashboardCard />
                </div>
                <div className="col-4 ">
                    <DashboardCard />
                </div>
            </div>
        </div>
    )
};

export default Home;