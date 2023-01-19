import DataTable from 'react-data-table-component';

const columns = [
    {
        name: 'Title',
        selector: row => row.title,
        sortable: true,
    },
    {
        name: 'Year',
        selector: row => row.year,
        sortable: true,
    },
];

const data = [
    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },
    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },
    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },
    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },
    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },
    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },
    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },
    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },
    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },
    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },

    {
        id: 1,
        title: 'Beetlejuice',
        year: '1988',
    },
]

function Features(){
    return(
        <div>
            <div className="row p-5">
                <div className="col - 4">
                                        <form>
                        <div class="mb-3">
                            <label htmlFor="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" />
                
                        </div>
                        <div class="mb-3">
                            <label htmlFor="year" class="form-label">Year</label>
                            <input type="number" class="form-control" id="year" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
                    <div className="col - 8">
                        <DataTable
                        title = "Feature List"
                        columns={columns}
                        data={data}
                        pagination
                        striped
                        highlightOnHover
                        dense/>
                    </div>

        
            </div>
        </div>
        
    );
};

export default Features;