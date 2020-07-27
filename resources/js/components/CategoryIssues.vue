<template>
    <div>
        <div class="tile">
            <h3 class="tile-title">Issues </h3>
            <hr>
            <div class="tile-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="issue">Select an issue <span class="m-l-5 text-danger"> *</span></label>
                            <textarea id=issue placeholder="add issue here" rows="10" cols="50" v-model="issue">

                            </textarea>
                        </div>
                    </div>
                    <!--click submit-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-primary" @click="createIssue()" v-if="createBtn">
                                Create Issue
                            </button>
                            <button class="btn btn-primary" @click="updateIssue()" v-if="editBtn" >
                                Edit Issue
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tile">
            <h3 class="tile-title">category issues</h3>
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="pa ,index in categoryIssues">
                            <td style="width: 25%" class="text-center">{{ index + 1}}</td>
                            <td style="width: 25%" class="text-center">{{ pa.name}}
                            <td style="width: 25%" class="text-center">
                                <button class="btn btn-sm btn-primary" @click="editCategoryIssue(pa)">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" @click="deleteCategoryIssue(pa.id)">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "category-issues",
        props: ['categoryid' ,'categoryname'],
        data() {
            return {
                categoryIssues: [],
                issues: [],
                issue: '',
                issueSelected: false,
                issueValues: [],
                createBtn : true,
                editBtn : false,
                thisEdit :''

            }
        },
        created: function() {
           // this.loadissues(this.categoryid);
            this.loadCategoryIssues(this.categoryid);
        },
        methods: {
            createIssue(){
                let _this = this;
                axios.post('/admin/categories/issues/create' , {
                    id:this.categoryid , issue : this.issue
                }).then((response) =>{
                     console.log('resonse'  ,response.data)
                    if(response.data.status === 'success'){
                        _this.$swal("Success! added issue to category" , {
                            icon: "success",
                        });
                        this.loadCategoryIssues(this.categoryid);
                    }else if(response.data.status === 'failure'){
                        this.$swal("Error, Some values are missing.", {
                            icon: "error",
                        });
                    }
                }).catch((error) => {
                    console.log(error);

                })

            },
            updateIssue(){
                let _this = this;
                let data = {
                    id:  this.thisEdit ,
                    issue:     this.issue
                };

                axios.post('/admin/categories/issues/update', {
                    data: data
                }).then ((response) =>{
                    if(response.data.status === 'success') {
                        this.loadCategoryIssues(this.categoryid);
                        console.log('_response', response.data)
                        _this.$swal("Success! " + response.data.message, {
                            icon: "success",
                        });
                        _this.issue = '';
                        _this.thisEdit = '';
                        _this.editBtn = false;
                        _this.createBtn = true;
                    }else if(response.data.status === 'failure'){
                        this.$swal("Error, Some values are missing.", {
                            icon: "error",
                        });
                    }
                }).catch(function (error) {
                    console.log(error);
                });

            },
            loadissues(id) {
                let _this = this;
                axios.post('/admin/categories/issues/load' , {
                    id: id
                }).then (function(response){
                    _this.issues = response.data;
                }).catch(function (error) {
                    console.log(error);
                });
            },
            loadCategoryIssues(id){
                let _this = this;
                axios.post('/admin/categories/issues', {
                    id: id
                }).then (function(response){
                    _this.categoryIssues = response.data;
                }).catch(function (error) {
                    console.log(error);
                });
            },
            editCategoryIssue(pa){
                this.createBtn = false;
                this.editBtn   = true;
                let _this = this;
                this.issue = pa.name;
                this.thisEdit = pa.id;

            },
            deleteCategoryIssue(id) {
                let _this = this;
                this.$swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        axios.post('/admin/categories/issues/delete', {
                            id: id
                        }).then ((response) =>{
                            if (response.data.status === 'success') {
                                _this.$swal("Success! category issue has been deleted!", {
                                    icon: "success",
                                });
                                this.loadCategoryIssues(this.categoryid);
                            } else {
                                _this.$swal("Your category issue not deleted!");
                            }
                        }).catch(function (error) {
                            console.log(error);
                        });

                    } else {
                        this.$swal("Action cancelled!");
                    }

                });

            }
        }
    }
</script>