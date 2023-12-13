
import Vuex from 'vuex';

export default new Vuex.Store({
    state: {
        cart: [],
        isAdmin: false,
        isSeller: false,
        isCustomer: false,
    },
    getters: {
        cartItems: state => state.cart,
    },
    mutations: {
        addToCart(state, product) {
            const existingProductIndex = state.cart.findIndex(item => item.id === product.id);

            if (existingProductIndex !== -1) {
                // Nếu sản phẩm đã tồn tại, cập nhật số lượng
                state.cart[existingProductIndex].qty += product.qty;
            } else {
                // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
                state.cart.push(product);
            }
            console.log('Sản phẩm đã được thêm vào giỏ hàng:', product);
        },
        updateCartItemQty(state, payload) {
            const { index, qty } = payload;
            if (state.cartItems && state.cartItems.length > 0 && state.cartItems[index]) {
                state.cartItems[index].qty = qty;
            }
        },
        checkAuth(state, auth) {
            if(auth == 'admin') {
                state.isAdmin = true;
            } else if (auth == 'seller') {
                state.isSeller = true;
            } else if (auth == 'customer') {
                state.isCustomer = true;
            }
        },
    },
});