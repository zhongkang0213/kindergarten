import React, { Component } from "react";
import { inject, observer } from "mobx-react";
import { Pagination } from "react-bootstrap";

import { Row, SimpleTable, Col, Box } from "adminlte-2-react";

@inject("List")
@observer
class List extends Component {
    componentDidMount = () => {
        this.props.List.getList();
    };

    render() {
        const columns = [
            { title: "#", data: "id", width: "10px" },
            { title: "名称", data: "name" }
        ];

        const pagination = (
            <Pagination bsSize="small" className="pull-right no-margin">
                <Pagination.First />
                <Pagination.Item>{1}</Pagination.Item>
                <Pagination.Item>{2}</Pagination.Item>
                <Pagination.Item>{3}</Pagination.Item>
                <Pagination.Last />
            </Pagination>
        );

        return (
            <Box border title={this.props.List.title}>
                <div className="box-header with-border">
                    <div className="pull-right">
                        <div
                            className="btn-group pull-right grid-create-btn"
                            style={{ marginRight: "10px" }}
                        >
                            <a
                                href=""
                                className="btn btn-sm btn-success"
                                title="新增"
                            >
                                <i className="fa fa-plus"></i>
                                <span className="hidden-xs">
                                    &nbsp;&nbsp;新增
                                </span>
                            </a>
                        </div>
                    </div>
                    <div className="pull-left"></div>
                </div>

                <div className="box-body table-responsive no-padding">
                    <SimpleTable
                        columns={columns}
                        data={this.props.List.lists}
                        hover
                    />
                </div>

                <div className="box-footer clearfix">{pagination}</div>
            </Box>
        );
    }
}

export default List;
