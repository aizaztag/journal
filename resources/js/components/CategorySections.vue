<template>
    <div>
        <div class="tile">
            <h3 class="tile-title">sections </h3>
            <hr>
            <div class="tile-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="parent">Select an section <span class="m-l-5 text-danger"> *</span></label>
                            <select id=parent class="form-control custom-select mt-15" v-model="section"  @change="selectsection(section)">
                                <option>select section to add inside current category</option>
                                <option :value="section" v-for="section  , index in sections" :ky="index"> {{ section.name }} </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tile">
            <h3 class="tile-title">category sections</h3>
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
                        <tr v-for="pa ,index in categoriesections">
                            <td style="width: 25%" class="text-center">{{ index + 1}}</td>
                            <td style="width: 25%" class="text-center">{{ pa.name}}
                            <td style="width: 25%" class="text-center">
                                <button class="btn btn-sm btn-danger" @click="deletecategoriesection(pa)">
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
        name: "category-sections",
        props: ['categoryid' ,'categoryname'],
        data() {
            return {
                categoriesections: [],
                sections: [],
                section: {},
                sectionSelected: false,
                sectionValues: [],
                value: {},
                valueSelected: false,
                currentsectionId: '',
                currentValue: '',
                currentQty: '',
                currentPrice: '',
                ky : ''
            }
        },
        created: function() {
            this.loadsections(this.categoryid);
            this.loadcategoriesections(this.categoryid);
        },
        methods: {
            loadsections(id) {
                let _this = this;
                axios.post('/admin/categories/sections/load' , {
                    id: id
                }).then (function(response){
                    _this.sections = response.data;
                }).catch(function (error) {
                    console.log(error);
                });
            },
            loadcategoriesections(id){
                let _this = this;
                axios.post('/admin/categories/sections', {
                    id: id
                }).then (function(response){
                    _this.categoriesections = response.data;
                }).catch(function (error) {
                    console.log(error);
                });
            },
            selectsection(section) {
                if(!section.id) return
                let _this = this;
                let selectedIndex = this.sections.indexOf(this.section)
                this.currentsectionId = section.id;
                axios.post('/admin/categories/sections/insert', {
                    section_id: section.id,
                    category_id: this.categoryid
                }).then (function(response){
                    _this.$swal("Success! added section to category" , {
                        icon: "success",
                    });
                    _this.categoriesections = response.data.new_sections;
                     Vue.delete(_this.sections, selectedIndex);
                }).catch(function (error) {
                    console.log(error);
                });

            },
            selectValue(value) {
                this.valueSelected = true;
                this.currentValue = value.value;
                this.currentQty = value.quantity;
                this.currentPrice = value.price;
            },
            addcategoriesection() {
                if (this.currentQty === null || this.currentPrice === null) {
                    this.$swal("Error, Some values are missing.", {
                        icon: "error",
                    });
                } else {
                    let _this = this;
                    let data = {
                        section_id: this.currentsectionId,
                        value:  this.currentValue,
                        quantity: this.currentQty,
                        price: this.currentPrice,
                        category_id: this.categoryid,
                    };

                    axios.post('/admin/categories/sections/add', {
                        data: data
                    }).then (function(response){
                        _this.$swal("Success! " + response.data.message, {
                            icon: "success",
                        });
                        _this.currentValue = '';
                        _this.currentQty = '';
                        _this.currentPrice = '';
                        _this.valueSelected = false;
                    }).catch(function (error) {
                        console.log(error);
                    });
                    this.loadcategoriesections(this.categoryid);
                }
            },
            deletecategoriesection(pa) {
                let _this = this;
                this.$swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        axios.post('/admin/categories/sections/delete', {
                            id: pa.id, category_id : pa.pivot.category_id ,section_id : pa.pivot.section_id ,
                        }).then ((response) =>{
                            if (response.data.status === 'success') {
                                _this.$swal("Success! category section has been deleted!", {
                                    icon: "success",
                                });
                                this.loadcategoriesections(this.categoryid);
                                this.sections.push( pa );

                            } else {
                                _this.$swal("Your category section not deleted!");
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