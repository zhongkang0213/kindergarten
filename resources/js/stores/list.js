import { observable, runInAction } from "mobx";
import axios from "../utils/axios";

class List {
    constructor() {}

    @observable title = "这是一个标题";
    @observable lists = [];

    async getList() {
        let res = await axios("/week_recipes/categories", "get", []);
        runInAction(() => {
            this.lists = res.data.data;
        });
    }
}

export default new List();
