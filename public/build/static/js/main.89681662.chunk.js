(window.webpackJsonp=window.webpackJsonp||[]).push([[0],{239:function(e,t,a){e.exports=a(504)},244:function(e,t,a){},245:function(e,t,a){},246:function(e,t,a){},348:function(e,t,a){},349:function(e,t,a){},404:function(e,t,a){},405:function(e,t,a){},408:function(e,t,a){},409:function(e,t,a){},465:function(e,t,a){},466:function(e,t,a){},467:function(e,t,a){},471:function(e,t,a){},484:function(e,t,a){},504:function(e,t,a){"use strict";a.r(t);var n,r=a(0),o=a.n(r),i=a(8),c=a.n(i),l=(a(244),a(15)),s=a(16),u=a(20),p=a(19),d=a(21),h=a(235),m=a(51),f=a(50),b=(a(245),a(246),function(e){function t(e){var a;return Object(l.a)(this,t),(a=Object(u.a)(this,Object(p.a)(t).call(this,e))).state={},a}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=Object.assign({width:this.props.width+"px",height:this.props.height+"px"},this.props.wrapperStyle);return o.a.createElement("div",{className:"basic-wrapper",style:e},this.props.children)}}]),t}(r.Component)),g=a(152),v=a(9),y=a(49),O="item",j=(a(348),function(e){function t(){return Object(l.a)(this,t),Object(u.a)(this,Object(p.a)(t).apply(this,arguments))}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.props,t=e.text,a=e.isDragging?.2:1;return(0,e.connectDragSource)(o.a.createElement("span",{className:"dragitem-wrapper",style:Object.assign({},{opacity:a})},t))}}]),t}(o.a.Component)),k=Object(y.DragSource)(O,{beginDrag:function(e){return{id:e.id,index:e.index,parentIndex:e.parentIndex,data:e.data}},isDragging:function(e,t){return t.getItem().id===e.id}},function(e,t){return{connectDragSource:e.dragSource(),isDragging:t.isDragging()}})(j),C=(a(349),g.a.SubMenu),T=function(e){function t(){return Object(l.a)(this,t),Object(u.a)(this,Object(p.a)(t).apply(this,arguments))}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.props.data;return o.a.createElement("div",{className:"droplist-wrapper"},o.a.createElement("div",{className:"menulist-title"},"\u6211\u7684\u98df\u7269\u5e93"),o.a.createElement(g.a,{mode:"inline"},e.map(function(e,t){return o.a.createElement(C,{title:e.name,key:"menu-".concat(t)},e.recipes.map(function(e,a){return o.a.createElement(g.a.Item,{key:"item-".concat(t,"-").concat(a)},o.a.createElement(v.a,{type:"menu"}),o.a.createElement(k,{text:e.name,id:"item-".concat(t,"-").concat(a),index:a,data:e}))}))})))}}]),t}(o.a.Component),w=a(509),N=a(511),S=(a(404),function(e){function t(){var e,a;Object(l.a)(this,t);for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).onChange=function(e,t,n){var r=a.props.tkey;a.props.onNumberChange(r,e,t,n)},a.closeCyTag=function(e,t){var n=a.props.tkey;a.props.closeCyTag(n,e)},a}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.props,t=e.data,a=e.item,n=e.type,r=e.index,i=e.connectDropTarget;return t.length?i(o.a.createElement("tr",null,0===r&&o.a.createElement("td",{className:"drop-table-td",rowSpan:t.length},n),o.a.createElement("td",{className:"drop-table-td"},o.a.createElement("span",{className:"td-name td-f-c"},a.name),o.a.createElement(w.a,{min:1,value:a.weight,onChange:this.onChange.bind(this,"caiyao",r),width:20}),o.a.createElement("div",{className:"tag-wrapper"},o.a.createElement(N.a,{onClose:this.closeCyTag.bind(this,r),closable:!0}))))):i(o.a.createElement("tr",null,o.a.createElement("td",{className:"drop-table-td"},n),o.a.createElement("td",{className:"drop-table-td"})))}}]),t}(o.a.Component)),E=Object(y.DropTarget)(O,{drop:function(e,t,a){e.handleTableItem(t.getItem().data,e.tkey)}},function(e,t){return{connectDropTarget:e.dropTarget(),isOver:t.isOver()}})(S),D=a(507),I=(a(405),D.a.TabPane),x=function(e){function t(){var e,a;Object(l.a)(this,t);for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).handleTabsChange=function(e){a.props.handleTabsChange&&a.props.handleTabsChange(e)},a}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.props.defaultTableIndex;return o.a.createElement("div",{className:"card-container"},o.a.createElement(D.a,{type:"card",defaultActiveKey:e,onChange:this.handleTabsChange},["\u5468\u4e00","\u5468\u4e8c","\u5468\u4e09","\u5468\u56db","\u5468\u4e94"].map(function(e,t){return o.a.createElement(I,{tab:e,key:t})})))}}]),t}(o.a.Component),_=(a(408),function(e){function t(){var e,a;Object(l.a)(this,t);for(var n=arguments.length,r=new Array(n),i=0;i<n;i++)r[i]=arguments[i];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).state={columns:[{title:"\u9910\u522b",dataIndex:"name",key:"name"},{title:"\u83dc\u80b4\uff08\u514b/\u4eba\uff09",dataIndex:"caiyao",key:"caiyao"}]},a.closeCyTag=function(e,t){a.props.closeCyTag(e,t)},a.onNumberChange=function(e,t,n,r){a.props.onNumberChange(e,t,n,r)},a.renderTableTr=function(e,t,n){return e.length?e.map(function(r,i){return o.a.createElement(E,{handleTableItem:a.handleTableItem,onNumberChange:a.onNumberChange,closeCyTag:a.closeCyTag,data:e,item:r,type:t,index:i,key:i,tkey:n})}):o.a.createElement(E,{handleTableItem:a.handleTableItem,onNumberChange:a.onNumberChange,closeCyTag:a.closeCyTag,data:e,type:t,index:null,tkey:n})},a.handleTableItem=function(e,t){a.props.handleTableItem&&a.props.handleTableItem(e,t)},a.handleTabsChange=function(e){a.props.handleTabsChange&&a.props.handleTabsChange(e)},a}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.state.columns,t=this.props.tableData,a=t.morning,n=t.aftern,r=t.evening,i=this.props,c=i.connectDropTarget,l=i.defaultTableIndex;return c(o.a.createElement("div",{className:"droparea-wrapper"},o.a.createElement(x,{handleTabsChange:this.handleTabsChange,defaultTableIndex:l}),o.a.createElement("table",{border:"1",frame:"void",align:"center",className:"table-wrapper"},o.a.createElement("tbody",null,o.a.createElement("tr",{className:"drop-table-tr"},e.map(function(e,t){return o.a.createElement("th",{className:"drop-table-th ".concat(0===t?"drop-table-th-80":""),key:t},e.title)})),this.renderTableTr(a,"\u65e9\u9910","morning"),this.renderTableTr(n,"\u5348\u9910","aftern"),this.renderTableTr(r,"\u665a\u9910","evening")))))}}]),t}(o.a.Component)),J=Object(y.DropTarget)(O,{drop:function(e,t,a){t.isOver({shallow:!0})&&e.handleDropArea(t.getItem().data)}},function(e){return{connectDropTarget:e.dropTarget()}})(_),A=(a(409),a(506)),M=(o.a.Component,a(510));M.a.config({maxCount:1,top:200});var z,R=Object(f.b)("homeStore")(n=Object(f.c)(n=function(e){function t(){for(var e,a,n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];return Object(l.a)(this,t),(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).state={tableData:new Array(5).fill({morning:[],aftern:[],evening:[]}),tableTabIndex:0,planId:""},a.componentDidMount=function(){var e=window.location.href.split("plan_id=")[1];a.props.homeStore.initPage(),a.props.homeStore.getRecipe(e),a.inputDebounce(a.props.homeStore.updateRecipe,800),a.setState({planId:e})},a.handleDropArea=function(e){var t=JSON.parse(JSON.stringify(a.props.homeStore.tableData)),n=a.state.tableTabIndex;t[n].evening.push(e),a.props.homeStore.createRecipe({plan_id:a.state.planId,week_id:+a.state.tableTabIndex+1,mark_id:3,recipe_id:e.id},n,"evening")},a.handleTableItem=function(e,t){var n=JSON.parse(JSON.stringify(a.props.homeStore.tableData));if(a._checkTableId(e,t)){var r=a.state.tableTabIndex;e.weight=null,n[r][t].push(e);var o="";switch(t){case"morning":o=1;break;case"aftern":o=2;break;default:o=3}a.props.homeStore.createRecipe({plan_id:a.state.planId,week_id:+a.state.tableTabIndex+1,mark_id:o,recipe_id:e.id},r,t)}else M.a.warning("\u8bf7\u52ff\u91cd\u590d\u6dfb\u52a0\u76f8\u540c\u83dc\u80b4")},a.closeCyTag=function(e,t){var n=JSON.parse(JSON.stringify(a.props.homeStore.tableData)),r=n[a.state.tableTabIndex][e].splice(t,1);a.props.homeStore.deleteRecipe(r[0].id,n)},a.onNumberChange=function(e,t,n,r){var o=JSON.parse(JSON.stringify(a.props.homeStore.tableData)),i=a.state.tableTabIndex;o[i][e][n].weight=r,a.inputDebounce(o[i][e][n].id,r,o),a.props.homeStore.setTableData(o)},a.handleTabsChange=function(e){a.setState({tableTabIndex:e})},a.inputDebounce=function(e,t){a.inputDebounce=a.debounce(e,t)},a.debounce=function(e,t){var a;return function(){var n=this,r=arguments;clearTimeout(a),a=setTimeout(function(){e.apply(n,r)},t)}},a._checkTableId=function(e,t){for(var n=JSON.parse(JSON.stringify(a.props.homeStore.tableData))[a.state.tableTabIndex][t],r=0;r<n.length;r++)if(+e.id===+n[r].recipe_id)return!1;return!0},a}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.state,t=(e.data,e.viewTableData,e.tableTabIndex),a=this.props.homeStore,n=a.foodsList,r=a.tableData;return o.a.createElement(b,{width:1200,height:550},o.a.createElement("div",{className:"home-wrapper"},o.a.createElement("div",null,o.a.createElement(T,{data:n})),o.a.createElement("div",null,o.a.createElement(J,{handleDropArea:this.handleDropArea,onNumberChange:this.onNumberChange,closeCyTag:this.closeCyTag,tableData:r[t],handleTableItem:this.handleTableItem,handleTabsChange:this.handleTabsChange,defaultTableIndex:""+t}))))}}]),t}(r.Component))||n)||n,F=a(505),L=(a(465),g.a.SubMenu),P=function(e){function t(){var e,a;Object(l.a)(this,t);for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).handleClick=function(e){a.props.handleClickMenuItem&&a.props.handleClickMenuItem(e.key.split("-"))},a}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.props,t=e.data,a=e.menuindex;return o.a.createElement("div",{className:"menuitem-wrapper"},o.a.createElement(g.a,{mode:"inline",onClick:this.handleClick},t.map(function(e,t){return o.a.createElement(L,{title:e.name,key:"menu-".concat(t)},e.foods.map(function(e,n){return o.a.createElement(g.a.Item,{key:"".concat(a,"-").concat(t,"-").concat(n)},o.a.createElement(v.a,{type:"menu"}),o.a.createElement("span",null,e.name))}))})))}}]),t}(o.a.Component),B=(a(466),function(e){function t(){var e,a;Object(l.a)(this,t);for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).handleClickMenuItem=function(e){a.props.handleClickMenuItem&&a.props.handleClickMenuItem(e)},a}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this,t=this.props.data;return o.a.createElement("div",{className:"menulist-wrapper"},o.a.createElement("div",{className:"menulist-title"},"\u6211\u7684\u98df\u6750\u5e93"),t.map(function(t,a){return o.a.createElement("div",{key:"menulist-".concat(a)},o.a.createElement(F.a,null,t.name),o.a.createElement(P,{data:t.sub,menuindex:a,handleClickMenuItem:e.handleClickMenuItem}))}))}}]),t}(o.a.Component)),W=a(61),K=a(84),U=a(508),$=a(64),q=(a(467),K.a.Option),G=function(e){function t(){var e,a;Object(l.a)(this,t);for(var n=arguments.length,r=new Array(n),i=0;i<n;i++)r[i]=arguments[i];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).state={tableColumns:[{title:"\u5e8f\u53f7",dataIndex:"xuhao",key:"xuhao",render:function(e,t,a){return o.a.createElement("span",null,a+1)}},{title:"\u98df\u6750",dataIndex:"shicai",key:"shicai"},{title:"\u51c0\u91cf\u7528\u6599\uff08\u514b\uff09",dataIndex:"jingliang",key:"jingliang",render:function(e,t,n){return o.a.createElement(U.a,{value:e,style:{width:80},onChange:a.inputChange.bind(Object(W.a)(Object(W.a)(a)),e,t,n)})}},{title:"\u70ed\u91cf\uff08\u5343\u5361\uff09",dataIndex:"reliang",key:"reliang"},{title:"\u64cd\u4f5c",dataIndex:"caozuo",key:"caozuo",render:function(e,t,n){return o.a.createElement($.a,{type:"primary",size:"small",onClick:a.handleTableDeleteButton.bind(Object(W.a)(Object(W.a)(a)),e,t,n)},"\u5220\u9664")}}]},a.handleFoodNameChange=function(e){a.props.handleFoodNameChange&&a.props.handleFoodNameChange(e.target.value)},a.handleSelectChange=function(e){var t=a.props.type,n=null;t.map(function(t){t.name===e&&(n=t.id)}),a.props.handleSelectChange&&a.props.handleSelectChange(n)},a.handleTableDeleteButton=function(e,t,n){a.props.handleDelete&&a.props.handleDelete(n)},a.inputChange=function(e,t,n,r){a.props.inputChange&&a.props.inputChange(n,r.target.value)},a.handleSave=function(){a.props.handleSave&&a.props.handleSave()},a}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.state.tableColumns,t=this.props,a=t.type,n=t.tableData,r=t.foodName,i=t.typeName;return o.a.createElement("div",{className:"main-wrapper"},o.a.createElement("div",{className:"main-content"},o.a.createElement("div",{className:"main-top"},o.a.createElement("div",{className:"foods-name"},o.a.createElement("span",{className:"item-s"},"\u83dc\u80b4\u540d\u79f0"),o.a.createElement(U.a,{placeholder:"\u8bf7\u8f93\u5165\u83dc\u80b4\u540d\u79f0",value:r,style:{width:150},onChange:this.handleFoodNameChange})),o.a.createElement("div",{className:"foods-select"},o.a.createElement("span",{className:"item-s"},"\u83dc\u80b4\u5206\u7c7b"),o.a.createElement(K.a,{value:i,style:{width:170},placeholder:"\u8bf7\u9009\u62e9",onChange:this.handleSelectChange},a.map(function(e,t){return o.a.createElement(q,{value:e.name,key:e.name},e.name)})))),o.a.createElement("div",null,o.a.createElement(A.a,{dataSource:n,columns:e,pagination:!1,bordered:!1}))),o.a.createElement("div",{className:"btn-save",onClick:this.handleSave},"\u4fdd\u5b58"))}}]),t}(o.a.Component);a(471);M.a.config({maxCount:1,top:200});var H=Object(f.b)("foodsStore")(z=Object(f.c)(z=function(e){function t(){var e,a;Object(l.a)(this,t);for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).state={data:[],recipeId:""},a.componentDidMount=function(){var e=window.location.href.split("recipe_id=")[1];a.props.foodsStore.getRecipeInfo(e),a.props.foodsStore.getCategories(),a.setState({recipeId:e})},a.handleClickMenuItem=function(e){var t=JSON.parse(JSON.stringify(a.props.foodsStore.foodsList)),n=JSON.parse(JSON.stringify(a.props.foodsStore.tableData)),r=t[+e[0]].sub[+e[1]].foods[+e[2]];if(a.checkMenuItem(r)){var o={};o.id=r.id,o.xuhao="",o.shicai=r.name,o.energy_kcal=r.energy_kcal,o.jingliang="",o.reliang="",o.caozuo="",n.push(o),n.map(function(e,t){e.key=t}),a.props.foodsStore.setTableData(n)}else M.a.warning("\u5f53\u524d\u98df\u6750\u5df2\u6dfb\u52a0\uff0c\u8bf7\u52ff\u91cd\u590d\u6dfb\u52a0")},a.checkMenuItem=function(e){for(var t=JSON.parse(JSON.stringify(a.props.foodsStore.tableData)),n=0;n<t.length;n++)if(+e.id===+t[n].id)return!1;return!0},a.inputChange=function(e,t){var n=JSON.parse(JSON.stringify(a.props.foodsStore.tableData));n[e].jingliang=t,n[e].reliang=+t*+n[e].energy_kcal/100||"",a.props.foodsStore.setTableData(n)},a.handleDelete=function(e){var t=JSON.parse(JSON.stringify(a.props.foodsStore.tableData));t.splice(e,1),a.props.foodsStore.setTableData(t)},a.handleFoodNameChange=function(e){a.props.foodsStore.setFoodName(e)},a.handleSelectChange=function(e){a.props.foodsStore.setTypeId(e),a.props.foodsStore.setTypename(e)},a.handleSave=function(){var e=a.props.foodsStore,t=e.foodName,n=e.typeId,r=JSON.parse(JSON.stringify(a.props.foodsStore.tableData));t?r.length?n?a.props.foodsStore.saveFoods(a.state.recipeId,function(){M.a.success("\u4fdd\u5b58\u6210\u529f\uff01")}):M.a.error("\u8bf7\u9009\u62e9\u83dc\u80b4\u5206\u7c7b\uff01"):M.a.error("\u8bf7\u7f16\u8f91\u83dc\u80b4\u98df\u6750\uff01"):M.a.error("\u8bf7\u586b\u5199\u83dc\u80b4\u540d\u79f0")},a}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){var e=this.props.foodsStore,t=e.foodsList,a=e.foodsType,n=e.foodName,r=e.tableData,i=e.typeName;return o.a.createElement(b,{width:1200,height:550},o.a.createElement("div",{className:"foods-wrapper"},o.a.createElement(B,{data:t,handleClickMenuItem:this.handleClickMenuItem}),o.a.createElement(G,{type:a,typeName:i,tableData:r,foodName:n,handleSave:this.handleSave,handleDelete:this.handleDelete,inputChange:this.inputChange,handleFoodNameChange:this.handleFoodNameChange,handleSelectChange:this.handleSelectChange})))}}]),t}(r.Component))||z)||z,Q=function(){return o.a.createElement(h.a,null,o.a.createElement(m.c,null,o.a.createElement(m.a,{exact:!0,path:"/",component:R}),o.a.createElement(m.a,{exact:!0,path:"/foods",component:H})))},V=a(236),X=a.n(V),Y=(a(214),a(484),function(e){function t(){var e,a;Object(l.a)(this,t);for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];return(a=Object(u.a)(this,(e=Object(p.a)(t)).call.apply(e,[this].concat(r)))).state={},a}return Object(d.a)(t,e),Object(s.a)(t,[{key:"render",value:function(){return o.a.createElement("div",{className:"app-container"},o.a.createElement(Q,null))}}]),t}(r.Component)),Z=Object(y.DragDropContext)(X.a)(Y),ee=a(27),te=a.n(ee),ae=a(40),ne=a(41),re=a(42),oe=(a(215),a(151)),ie=a.n(oe),ce="".concat(window.location.protocol,"//shiyu.hailiyouxuan.com/admin/api");function le(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"/",t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"get",a=arguments.length>2?arguments[2]:void 0,n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:{headers:{"Content-Type":"application/json"}};if("get"===t){var r=ce+e+(e.indexOf("?")<0?"?":"&")+function(e){var t="";for(var a in e){var n=void 0!==e[a]?e[a]:"";t+="&"+a+"="+encodeURIComponent(n)}return t?t.substring(1):""}(a);return new Promise(function(e,t){ie.a.get(r,n).then(function(a){200===a.status?e(a):(M.a.error("\u8bf7\u6c42\u9519\u8bef\uff0c\u8bf7\u8054\u7cfb\u7ba1\u7406\u5458"),t(a))}).catch(function(e){M.a.error("\u8bf7\u6c42\u9519\u8bef\uff0c\u8bf7\u8054\u7cfb\u7ba1\u7406\u5458"),t(e)})})}if("post"===t)return new Promise(function(t,r){ie.a.post(ce+e,a,n).then(function(e){200===e.status?t(e):(M.a.error("\u8bf7\u6c42\u9519\u8bef\uff0c\u8bf7\u8054\u7cfb\u7ba1\u7406\u5458"),r(e))}).catch(function(e){M.a.error("\u8bf7\u6c42\u9519\u8bef\uff0c\u8bf7\u8054\u7cfb\u7ba1\u7406\u5458"),r(e)})})}M.a.config({maxCount:1,top:200});var se,ue,pe,de,he,me,fe,be,ge,ve,ye=a(12),Oe={homeStore:new(se=function(){function e(){Object(l.a)(this,e),Object(ne.a)(this,"foodsList",ue,this),Object(ne.a)(this,"tableData",pe,this)}return Object(s.a)(e,[{key:"initPage",value:function(){var e=Object(ae.a)(te.a.mark(function e(){var t,a=this;return te.a.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,le("/week_recipes/categories","get",{});case 2:t=e.sent,Object(ye.l)(function(){a.foodsList=t.data.data});case 4:case"end":return e.stop()}},e)}));return function(){return e.apply(this,arguments)}}()},{key:"getRecipe",value:function(){var e=Object(ae.a)(te.a.mark(function e(t){var a,n=this;return te.a.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,le("/week_recipes/edit","get",{plan_id:t});case 2:a=e.sent,Object(ye.l)(function(){n.tableData=n.initTableData(a.data.data)});case 4:case"end":return e.stop()}},e)}));return function(t){return e.apply(this,arguments)}}()},{key:"createRecipe",value:function(){var e=Object(ae.a)(te.a.mark(function e(t,a,n){var r,o=this;return te.a.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,le("/week_recipes/store","post",t);case 2:r=e.sent,Object(ye.l)(function(){var e=JSON.parse(JSON.stringify(o.tableData));e[a][n].push(r.data.data),o.setTableData(e)});case 4:case"end":return e.stop()}},e)}));return function(t,a,n){return e.apply(this,arguments)}}()},{key:"deleteRecipe",value:function(){var e=Object(ae.a)(te.a.mark(function e(t,a){var n=this;return te.a.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,le("/week_recipes/delete","post",{detail_id:t});case 2:e.sent,Object(ye.l)(function(){n.setTableData(a)});case 4:case"end":return e.stop()}},e)}));return function(t,a){return e.apply(this,arguments)}}()},{key:"updateRecipe",value:function(){var e=Object(ae.a)(te.a.mark(function e(t,a,n){return te.a.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,le("/week_recipes/update","post",{detail_id:t,weight:a});case 2:e.sent;case 3:case"end":return e.stop()}},e)}));return function(t,a,n){return e.apply(this,arguments)}}()},{key:"setTableData",value:function(e){this.tableData=e}},{key:"initTableData",value:function(e){var t=[{morning:[],aftern:[],evening:[]},{morning:[],aftern:[],evening:[]},{morning:[],aftern:[],evening:[]},{morning:[],aftern:[],evening:[]},{morning:[],aftern:[],evening:[]}];for(var a in e)for(var n in e[a]){var r=e[a][n];switch(+n){case 1:t[+a-1].morning=r;break;case 2:t[+a-1].aftern=r;break;case 3:t[+a-1].evening=r}}return t}}]),e}(),ue=Object(re.a)(se.prototype,"foodsList",[ye.k],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return[]}}),pe=Object(re.a)(se.prototype,"tableData",[ye.k],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return new Array(5).fill({morning:[],aftern:[],evening:[]})}}),se),foodsStore:new(de=function(){function e(){Object(l.a)(this,e),Object(ne.a)(this,"foodsList",he,this),Object(ne.a)(this,"foodsType",me,this),Object(ne.a)(this,"foodName",fe,this),Object(ne.a)(this,"typeId",be,this),Object(ne.a)(this,"tableData",ge,this),Object(ne.a)(this,"typeName",ve,this)}return Object(s.a)(e,[{key:"getCategories",value:function(){var e=Object(ae.a)(te.a.mark(function e(){var t,a=this;return te.a.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,le("/food/categories","get",{});case 2:t=e.sent,Object(ye.l)(function(){a.foodsList=t.data.data});case 4:case"end":return e.stop()}},e)}));return function(){return e.apply(this,arguments)}}()},{key:"getRecipeInfo",value:function(){var e=Object(ae.a)(te.a.mark(function e(t){var a,n,r,o=this;return te.a.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,le("/recipes/edit","get",{recipe_id:t});case 2:return a=e.sent,e.next=5,le("/recipes/categories","get",{});case 5:n=e.sent,r=a.data.data.recipe,Object(ye.l)(function(){o.foodsType=n.data.data,o.foodName=r.name,o.typeId=r.tag_id,o.initTableData(r.foods),o.tag_id=r.tag_id,o.setTypename(r.tag_id)});case 8:case"end":return e.stop()}},e)}));return function(t){return e.apply(this,arguments)}}()},{key:"saveFoods",value:function(){var e=Object(ae.a)(te.a.mark(function e(t,a){var n,r;return te.a.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return n=this.filterTableData(),(r={}).recipe_id=t,r.name=this.foodName,r.tag_id=this.typeId,r.foods=n,e.next=8,le("/recipes/store","post",r);case 8:e.sent,a&&a();case 10:case"end":return e.stop()}},e,this)}));return function(t,a){return e.apply(this,arguments)}}()},{key:"initTableData",value:function(e){var t=this;e.map(function(e,a){var n={};n.id=e.food_id,n.xuhao="",n.shicai=e.name,n.energy_kcal=e.energy_kcal,n.jingliang=e.weight,n.reliang=Number(e.weight)*Number(e.energy_kcal)/100,n.caozuo="",n.key=a,t.tableData.push(n)})}},{key:"setTableData",value:function(e){this.tableData=e}},{key:"filterTableData",value:function(){var e=[];return this.tableData.map(function(t){var a={};a.id=t.id,a.food_id=t.id,a.name=t.shicai,a.weight=t.jingliang,e.push(a)}),e}},{key:"setFoodName",value:function(e){this.foodName=e}},{key:"setTypeId",value:function(e){this.typeId=e,this.setTypename(e)}},{key:"setTypename",value:function(e){var t=this;this.foodsType.map(function(a){+a.id===+e&&(t.typeName=a.name,console.log(t.typeName))})}}]),e}(),he=Object(re.a)(de.prototype,"foodsList",[ye.k],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return[]}}),me=Object(re.a)(de.prototype,"foodsType",[ye.k],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return[]}}),fe=Object(re.a)(de.prototype,"foodName",[ye.k],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return""}}),be=Object(re.a)(de.prototype,"typeId",[ye.k],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return""}}),ge=Object(re.a)(de.prototype,"tableData",[ye.k],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return[]}}),ve=Object(re.a)(de.prototype,"typeName",[ye.k],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return""}}),de)};Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/));c.a.render(o.a.createElement(f.a,Oe,o.a.createElement(Z,null)),document.getElementById("root")),"serviceWorker"in navigator&&navigator.serviceWorker.ready.then(function(e){e.unregister()})}},[[239,1,2]]]);
//# sourceMappingURL=main.89681662.chunk.js.map